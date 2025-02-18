<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6454aa61d36164254036b36c455b0d68
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Leuffen\\TextTemplate\\' => 21,
        ),
        'J' => 
        array (
            'Jaybizzle\\CrawlerDetect\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Leuffen\\TextTemplate\\' => 
        array (
            0 => __DIR__ . '/..' . '/text/template/src',
        ),
        'Jaybizzle\\CrawlerDetect\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaybizzle/crawler-detect/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'x' => 
        array (
            'xrstf\\Composer52' => 
            array (
                0 => __DIR__ . '/..' . '/xrstf/composer-php52/lib',
            ),
        ),
        't' => 
        array (
            'tad_EA52_' => 
            array (
                0 => __DIR__ . '/..' . '/lucatume/di52/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'EAAdminPanel' => __DIR__ . '/../..' . '/src/admin.php',
        'EAAjax' => __DIR__ . '/../..' . '/src/ajax.php',
        'EAApiFullCalendar' => __DIR__ . '/../..' . '/src/api/apifullcalendar.php',
        'EAAppointmentFields' => __DIR__ . '/../..' . '/src/fields/appointment.php',
        'EADBModels' => __DIR__ . '/../..' . '/src/dbmodels.php',
        'EADateTime' => __DIR__ . '/../..' . '/src/datetime.php',
        'EAFrontend' => __DIR__ . '/../..' . '/src/frontend.php',
        'EAFullCalendar' => __DIR__ . '/../..' . '/src/shortcodes/fullcalendar.php',
        'EAGDPRActions' => __DIR__ . '/../..' . '/src/api/gdpr.php',
        'EAInstallTools' => __DIR__ . '/../..' . '/src/install.php',
        'EALogActions' => __DIR__ . '/../..' . '/src/api/logactions.php',
        'EALogic' => __DIR__ . '/../..' . '/src/logic.php',
        'EAMail' => __DIR__ . '/../..' . '/src/mail.php',
        'EAMainApi' => __DIR__ . '/../..' . '/src/api/mainapi.php',
        'EAMetaFields' => __DIR__ . '/../..' . '/src/metafields.php',
        'EAOptions' => __DIR__ . '/../..' . '/src/options.php',
        'EAReport' => __DIR__ . '/../..' . '/src/report.php',
        'EASlotsLogic' => __DIR__ . '/../..' . '/src/services/SlotsLogic.php',
        'EATableColumns' => __DIR__ . '/../..' . '/src/fields/tablecolumns.php',
        'EAUninstallTools' => __DIR__ . '/../..' . '/src/uninstall.php',
        'EAUserFieldMapper' => __DIR__ . '/../..' . '/src/services/UserFieldMapper.php',
        'EAUtils' => __DIR__ . '/../..' . '/src/utils.php',
        'EAVacationActions' => __DIR__ . '/../..' . '/src/api/vacation.php',
        'Jaybizzle\\CrawlerDetect\\CrawlerDetect' => __DIR__ . '/..' . '/jaybizzle/crawler-detect/src/CrawlerDetect.php',
        'Jaybizzle\\CrawlerDetect\\Fixtures\\AbstractProvider' => __DIR__ . '/..' . '/jaybizzle/crawler-detect/src/Fixtures/AbstractProvider.php',
        'Jaybizzle\\CrawlerDetect\\Fixtures\\Crawlers' => __DIR__ . '/..' . '/jaybizzle/crawler-detect/src/Fixtures/Crawlers.php',
        'Jaybizzle\\CrawlerDetect\\Fixtures\\Exclusions' => __DIR__ . '/..' . '/jaybizzle/crawler-detect/src/Fixtures/Exclusions.php',
        'Jaybizzle\\CrawlerDetect\\Fixtures\\Headers' => __DIR__ . '/..' . '/jaybizzle/crawler-detect/src/Fixtures/Headers.php',
        'Leuffen\\TextTemplate\\TemplateParsingException' => __DIR__ . '/..' . '/text/template/src/TemplateParsingException.php',
        'Leuffen\\TextTemplate\\TextTemplate' => __DIR__ . '/..' . '/text/template/src/TextTemplate.php',
        'Leuffen\\TextTemplate\\TextTemplatePlugin' => __DIR__ . '/..' . '/text/template/src/TextTemplatePlugin.php',
        'Leuffen\\TextTemplate\\UndefinedVariableException' => __DIR__ . '/..' . '/text/template/src/UndefinedVariableException.php',
        'Leuffen\\TextTemplate\\__BreakLoopException' => __DIR__ . '/..' . '/text/template/src/__BreakLoopException.php',
        'Leuffen\\TextTemplate\\__ContinueLoopException' => __DIR__ . '/..' . '/text/template/src/__ContinueLoopException.php',
        'tad_EA52_Container' => __DIR__ . '/..' . '/lucatume/di52/src/tad/EA52/Container.php',
        'tad_EA52_ContainerInterface' => __DIR__ . '/..' . '/lucatume/di52/src/tad/EA52/ContainerInterface.php',
        'tad_EA52_ProtectedValue' => __DIR__ . '/..' . '/lucatume/di52/src/tad/EA52/ProtectedValue.php',
        'tad_EA52_ServiceProvider' => __DIR__ . '/..' . '/lucatume/di52/src/tad/EA52/ServiceProvider.php',
        'tad_EA52_ServiceProviderInterface' => __DIR__ . '/..' . '/lucatume/di52/src/tad/EA52/ServiceProviderInterface.php',
        'xrstf\\Composer52\\AutoloadGenerator' => __DIR__ . '/..' . '/xrstf/composer-php52/lib/xrstf/Composer52/AutoloadGenerator.php',
        'xrstf\\Composer52\\Generator' => __DIR__ . '/..' . '/xrstf/composer-php52/lib/xrstf/Composer52/Generator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6454aa61d36164254036b36c455b0d68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6454aa61d36164254036b36c455b0d68::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6454aa61d36164254036b36c455b0d68::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6454aa61d36164254036b36c455b0d68::$classMap;

        }, null, ClassLoader::class);
    }
}
