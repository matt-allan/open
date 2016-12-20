<?php

namespace Yuloh\Open;

function open($target)
{
    switch (PHP_OS) {
        case 'Darwin':
            $opener = 'open';
            break;
        case 'WINNT':
            $opener = 'start';
            break;
        default:
            $opener = 'xdg-open';
    }

    exec(sprintf('%s %s', $opener, escapeshellarg($target)));
}
