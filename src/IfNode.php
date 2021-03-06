<?php
namespace Pharborist;

/**
 * if control structure.
 * @package Pharborist
 */
class IfNode extends Node {
  /**
   * @var Node
   */
  public $condition;

  /**
   * @var Node
   */
  public $then;

  /**
   * @var Node[]
   */
  public $elseIfList = array();

  /**
   * @var Node
   */
  public $else;
}
