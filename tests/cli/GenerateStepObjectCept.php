<?php
/**
 * @group sandbox
 */

$I = new CliGuy\GeneratorSteps($scenario);
$I->wantTo('generate step object');
$I->executeCommand('generate:stepobject dummy Login --silent');
$I->seeFileWithGeneratedClass('Login', 'tests/_support/Step/Dummy');
$I->seeInThisFile('Login extends \DumbGuy');
