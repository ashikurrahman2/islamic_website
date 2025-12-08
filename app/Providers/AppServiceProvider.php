<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (app()->runningInConsole()) {
            $args = $_SERVER['argv'] ?? [];

            if (isset($args[1]) && $args[1] === 'serve') {

                $validSecret = config('security.dev_whyAreWeStillHere_ans_me_go_please');
                $allowedIps  = config('security.allow_without_secret_from_ips', []);

                $clientIp = Request::ip();
                if (in_array($clientIp, $allowedIps)) {
                    return; 
                }
                $providedSecret = null;
                foreach ($args as $arg) {
                    if (str_starts_with($arg, '--secret=')) {
                        $providedSecret = substr($arg, 9); 
                        break;
                    }
                }

                if ($providedSecret !== $validSecret) {
                    echo "\e[31m╔══════════════════════════════════════════════╗\e[0m\n";
                    echo "\e[31m║          ACCESS DENIED!                      ║\e[0m\n";
                    echo "\e[31m║ No permission to run the server without a developer        ║\e[0m\n";
                    echo "\e[31m╚══════════════════════════════════════════════╝\e[0m\n\n";
                    exit(1);
                }
                echo "\e[32mSecret key verified — Server starting...\e[0m\n\n";
            }
        }
      }
    }
    
