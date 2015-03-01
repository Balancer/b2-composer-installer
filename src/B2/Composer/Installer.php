<?php

namespace B2\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Installer\LibraryInstaller;
use Composer\Repository\InstalledRepositoryInterface;
use Composer\Package\PackageInterface;

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

	public function update(InstalledRepositoryInterface $repo, PackageInterface $initial, PackageInterface $target)
    {
    	echo "test installer update\n";
    }

	public function install(InstalledRepositoryInterface $repo, PackageInterface $package)
    {
    	echo "test installer install\n";
    }
}
