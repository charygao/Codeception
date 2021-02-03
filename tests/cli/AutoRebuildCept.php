<?php
/**
 * @group sandbox
 */
$I = new CliGuy($scenario);
$I->wantTo('change configs and check that Guy is rebuilt');

$I->writeToFile('tests/dummy.suite.yml', <<<EOF
class_name: DumbGuy
modules:
    enabled: [Cli, Filesystem]
EOF
);
$I->executeCommand('run dummy AnotherTest.php --debug');
$I->seeInShellOutput('Cli');
$I->seeFileFound('tests/_support/_generated/DumbGuyActions.php');
$I->seeInThisFile('public function seeInShellOutput');
$I->seeInThisFile('public function runShellCommand');
