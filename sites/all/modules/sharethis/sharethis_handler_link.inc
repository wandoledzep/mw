<?php
/**
 * Field handler to present a link node edit.
 */
class sharethis_handler_link extends views_handler_field_node_link {
  function construct() {
    parent::construct();
    $this->additional_fields['title'] = 'title';
  }

  function render($values) {
    $node = new stdClass();
    $node->nid = $values->{$this->aliases['nid']};
    $node->title = $values->{$this->aliases['title']};

    return theme('sharethis', $node->title, 'node/'. $node->nid);
  }
}
