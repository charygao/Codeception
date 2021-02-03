<?php
/**
 * @group sandbox
 */

$I = new CliGuy\GeneratorSteps($scenario);
$I->wantTo('generate new group');
$I->executeCommand('generate:group core');
$I->seeFileWithGeneratedClass('Core', 'tests/_support/Group');
$I->seeInThisFile("static \$group = 'core'");
$I->dontSeeInThisFile('public function _before(\Codeception\Event\Test \$e)');