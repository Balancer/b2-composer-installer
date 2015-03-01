<?php

namespace B2\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{
	public function supports($packageType)
	{
		echo "test installer support '$packageType'\n";
		return 'bors-component' == $packageType;
	}

    public static function postAutoloadDump(Event $event)
    {
        $composer = $event->getComposer();
        $io = $event->getIO();
        $io->write('<info>Test: postAutoloadDump</info>');
	}

	public function activate(Composer $composer, IOInterface $io)
    {
    	echo "test installer activate\n";
//        $installer = new TemplateInstaller($io, $composer);
//        $composer->getInstallationManager()->addInstaller($installer);
    }

	public function update(Composer $composer, IOInterface $io)
    {
    	echo "test installer update\n";
    }

	public function install(Composer\Repository\InstalledRepositoryInterface $repo, Composer\Package\PackageInterface $package)
    {
    	echo "test installer install\n";
    }
}
