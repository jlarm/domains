<?php

namespace App\Console\Commands;

use App\Models\Domain;
use Illuminate\Console\Command;

class UpdateExpiredDomainStatusCommand extends Command
{
    protected $signature = 'update:expired-domain-status';

    protected $description = 'Command description';

    public function handle(): void
    {
        $domains = Domain::all();

        foreach ($domains as $domain) {
            if ($domain->expiration < now() && $domain->status !== 0)
                $domain->update(['status' => 0]);
            }
        }
}
