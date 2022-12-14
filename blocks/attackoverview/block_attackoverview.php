<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Form for editing HTML block instances.
 *
 * @package   block_attackoverview
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_attackoverview extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_attackoverview');
    }

    function get_content() {
        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = "Organization Security Threat Score";
        $this->content->text = "Graphs here";
        $this->content->text = "Threat Score: clicked_links/Sent_links * 100";
        $this->content->footer = "";



        return $this->content;
    }

}