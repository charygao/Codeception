<?php
/**
 * @group sandbox
 */

$I = new CliGuy($scenario);
$I->wantTo('generate gherkin steps');
$I->executeCommand('generate:feature scenario Login');
$I->seeInShellOutput('Feature was created');
$I->seeFileFound('Login.feature', 'tests/scenario');
$I->seeInThisFile('Feature: Login');
$I->deleteThisFile();

$I->executeCommand('generate:feature scenario dummy/Login');
$I->seeFileFound('Login.feature', 'tests/scenario/dummy');
$I->seeInThisFile('Feature: Login');
