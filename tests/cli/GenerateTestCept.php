<?php
/**
 * @group sandbox
 */

$I = new CliGuy\GeneratorSteps($scenario);
$I->wantTo('generate sample Test');
$I->executeCommand('generate:test dummy Sommy');
$I->seeFileWithGeneratedClass('SommyTest');
$I->seeInThisFile('class SommyTest extends \Codeception\Test\Unit');
$I->seeInThisFile('protected $tester');
$I->seeInThisFile("function _before(");
