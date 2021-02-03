<?php
$I = new CliGuy($scenario);
$I->wantTo('see that my group extension works');
$I->executeCommand('run -c tests/data/cli-tests/codeception_grouped.yml skipped -g notorun');
$I->dontSeeInShellOutput("======> Entering NoGroup Test Scope\nMake it incomplete");
$I->dontSeeInShellOutput('<====== Ending NoGroup Test Scope');
$I->executeCommand('run -c tests/data/cli-tests/codeception_grouped.yml math -g ok');
$I->dontSeeInShellOutput("======> Entering Ok Test Scope\nMake it incomplete");
$I->dontSeeInShellOutput('<====== Ending Ok Test Scope');
