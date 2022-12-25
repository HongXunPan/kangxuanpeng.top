<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\View\RenderInterface;

class IndexController extends AbstractController
{
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }

    public function main(RenderInterface $render, RequestInterface $request)
    {
        $domain = explode('//', rtrim($request->url(), $request->getPathInfo()))[1];
        $show = 1;
        if (in_array($domain, ['www.kangxuanpeng.top', 'kangxuanpeng.top'])) {
            $show = 2;
        }
        return $render->render('main.index', compact('show'));
    }
}
