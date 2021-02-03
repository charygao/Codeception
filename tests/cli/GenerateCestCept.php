<?php
/**
 * @group sandbox
 */

$I = new CliGuy\GeneratorSteps($scenario);
$I->wantTo('generate sample Cest');
$I->executeCommand('generate:cest dummy DummyClass');
$I->seeFileWithGeneratedClass('DummyClass');
