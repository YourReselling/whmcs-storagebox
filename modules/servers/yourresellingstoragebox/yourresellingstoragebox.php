<?php

declare(strict_types=1);

if (! defined('WHMCS')) {
    exit('Direct access is not permitted.');
}

require_once __DIR__.'/bootstrap.php';

use YourReselling\Whmcs\Storagebox\Integration\WhmcsModule;

/** StorageBox: MetaData. */
function yourresellingstoragebox_MetaData(): array
{
    return ['DisplayName' => 'Your-Reselling · StorageBox', 'APIVersion' => '1.1', 'RequiresServer' => true];
}

/** StorageBox: ConfigOptions. */
function yourresellingstoragebox_ConfigOptions(): array
{
    return WhmcsModule::configOptions('storagebox');
}

/** StorageBox: CreateAccount. */
function yourresellingstoragebox_CreateAccount(array $params): string
{
    return WhmcsModule::run('storagebox', 'create', $params);
}

/** StorageBox: TestConnection. */
function yourresellingstoragebox_TestConnection(array $params): array
{
    return WhmcsModule::testConnection($params);
}

/** StorageBox: ClientArea. */
function yourresellingstoragebox_ClientArea(array $params): array
{
    return WhmcsModule::clientArea('storagebox', $params);
}

/** StorageBox: AdminCustomButtonArray. */
function yourresellingstoragebox_AdminCustomButtonArray(): array
{
    return WhmcsModule::adminButtons('storagebox');
}

/** StorageBox: RefreshStatus. */
function yourresellingstoragebox_RefreshStatus(array $params): string
{
    return WhmcsModule::run('storagebox', 'refresh', $params);
}

/** StorageBox: TerminateAccount. */
function yourresellingstoragebox_TerminateAccount(array $params): string
{
    return WhmcsModule::run('storagebox', 'termination', $params);
}
