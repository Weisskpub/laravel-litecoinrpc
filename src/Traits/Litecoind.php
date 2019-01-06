<?php

namespace Weisskpub\Litecoin\Traits;

trait Litecoind
{
    public function litecoind()
    {
        return app('litecoind');
    }
}
