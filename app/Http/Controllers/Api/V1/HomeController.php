<?php

    namespace App\Http\Controllers\Api\V1;

    use App\Http\Controllers\Controller;
    use App\Mail\OrderShipped;
    use App\Notifications\InvoicePAid;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Notification;

    class HomeController extends Controller {
        public function __invoke() {

            Notification::route('mail', ['suitsconception@gmail.com' => 'Suits Conception'])->notify(new InvoicePAid);

            return [
                'success' => true,
                'message' => __('messages.welcome'),
                'data' => [
                    'service' => 'laravel API',
                    'version' => '1.0',
                    'language' => app()->getLocale(),
                    'support' => 'contact@suitsconception.com'
                ]
            ];
        }
    }
