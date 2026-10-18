<?php
/**
 * AdminNeo plugin
 * Displays column comment in table header data-listing page
 *
 * Install to AdminNeo on https://www.adminneo.org/plugins#usage
 * @author Tom Higuchi, https://tom-gs.com/
 */

namespace AdminNeo;

class ShowColumnComment extends Plugin
{
    /**
     * Append column comment to column name.
     *
     * @param array $field
     * @param int $order
     * @return string
     */
    public function getFieldName(array $field, $order = 0)
    {
        $name = h($field['field']);
        if (!empty($field['comment'])) {
            $name .= '<br />' . h($field['comment']);
        }
        return $name;
    }
}
