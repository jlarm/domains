<?php

namespace App\Console\Commands;

use App\Mail\DomainExpiryMail;
use App\Models\Domain;
use Illuminate\Console\Command;
use Mail;

class SendDomainExpiryEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-domain-expiry-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email to the domain owner when their domain is about to expire.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('The command is starting');

        $domains = Domain::query()
            ->whereDate('expiration', now()->addDays(30))
            ->orWhereDate('expiration', now()->addDays(7))
            ->orWhereDate('expiration', now()->addDays(3))
            ->orWhereDate('expiration', now()->addDays(2))
            ->orWhereDate('expiration', now()->addDay())
            ->orWhereDate('expiration', now())
            ->get();

        $this->info('Found ' . $domains->count() . ' domains to send emails to');

        foreach ($domains as $domain) {
            Mail::to('jlohr@autorisknow.com')->send(new DomainExpiryMail($domain));
        }

        $this->info('The command has completed');
    }
}
