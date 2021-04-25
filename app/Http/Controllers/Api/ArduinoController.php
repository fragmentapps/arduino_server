<?php


namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Symfony\Component\Process\Process;

class ArduinoController extends Controller
{
    /**
     * upload api
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $process = new Process('/opt/arduino-1.8.13/hardware/tools/avr/bin/avrdude -C/opt/arduino-1.8.13/hardware/tools/avr/etc/avrdude.conf -v -patmega328p -carduino -P/dev/ttyACM0 -b115200 -D -Uflash:w:/tmp/arduino_build_509683/Blink.ino.hex:i 
        ');
        $process->run();
    }
}