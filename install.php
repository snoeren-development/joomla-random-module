<?php
declare(strict_types = 1);

class mod_sdrandommoduleInstallerScript // phpcs:ignore
{
    /**
     * Runs after installation.
     *
     * @return void
     */
    public function install(): void
    {
        echo <<<HTML
<style>
    .btn-sd {
        display: inline-block;
        background-color: #8f5ba1;
        color: #fff;
        padding: .5rem 1rem;
        margin-top: 1rem;
    }
    .btn-sd:hover {
        color: #fff;
        text-decoration: none;
    }
    .btn-outline-sd {
        border: 1px solid #8f5ba1;
        padding: .5rem 1rem;
        margin-top: 1rem;
        display: block;
    }
</style>
<div class="row" style="margin-bottom: 30px;">
    <div class="span1">&nbsp;</div>
    <div class="span3 col-md-4">
        <img
            src="../media/mod_sdrandommodule/sd-random-module-logo.png"
            alt="SD Random Module Logo"
            style="width:100%" />
    </div>

    <div class="span6 col-md-7">
        <h2>SD Random Module</h2>

        SD Random Module shows a random module from a (custom) position of your
        site. This way you can easily show a random image, random streamer,
        random survey and more.<br>

        <ul class="inline list-inline">
            <li class="list-inline-item">
                <a
                    href="https://docs.snoerendevelopment.com/sd-random-module"
                    class="btn-outline-sd"
                    target="_blank">
                    Getting started
                </a>
            </li>
        </ul>
    </div>
</div>
HTML;
    }
}
