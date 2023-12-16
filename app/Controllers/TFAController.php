<?php

namespace App\Controllers;

use App\Contracts\Request;

class TFAController
{
    public function sendCode(Request $request)
    {
        try {
            $request->user()->sendTFA($request->get('tfa_type'));

            return json_encode(['status' => 'success', 'message' => 'ok', 'show_tfa_input' => true]);
        } catch (\Exception $e) {
            return json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}