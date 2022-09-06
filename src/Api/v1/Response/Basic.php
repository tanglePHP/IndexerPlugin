<?php namespace tanglePHP\IndexerPlugin\Api\v1\Response;

use tanglePHP\Core\Exception\Helper as HelperException;
use tanglePHP\Core\Models\ResponseArray;
use tanglePHP\Core\Models\AbstractApiResponse;

/**
 * Class Basic
 *
 * @package      tanglePHP\indexer-plugin\Api\v1\Response
 * @author       Stefan Braun <stefan.braun@tanglePHP.com>
 * @copyright    Copyright (c) 2022, StefanBraun
 * @version      2022.08.22-1219
 */
class Basic extends AbstractApiResponse {
  /**
   * @var int
   */
  public int $ledgerIndex;
  /**
   * @var int
   */
  public int $pageSize;
  /**
   * @var ResponseArray
   */
  public ResponseArray $items;

  /**
   * @return void
   * @throws HelperException
   */
  protected function parse(): void {
    $this->defaultParse();
  }
}