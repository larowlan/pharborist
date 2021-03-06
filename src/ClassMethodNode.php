<?php
namespace Pharborist;

/**
 * A class method.
 * @package Pharborist
 */
class ClassMethodNode extends Node {
  /**
   * @var ModifiersNode
   */
  public $modifiers;

  /**
   * @var Node
   */
  public $reference;

  /**
   * @var Node
   */
  public $name;

  /**
   * @var Node
   */
  public $parameters;

  /**
   * @var Node
   */
  public $body;
}
