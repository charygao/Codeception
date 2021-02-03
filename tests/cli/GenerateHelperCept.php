<?php
/**
 * @group sandbox
 */

$I = new CliGuy\GeneratorSteps($scenario);
$I->wantTo('generate helper');
$I->executeCommand('generate:helper Db');
$I->seeFileWithGeneratedClass('Db', 'tests/_support/Helper');
$I->seeInThisFile('Db extends \Codeception\Module');
