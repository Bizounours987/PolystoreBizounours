<?php
namespace view;

class DefaultView {

    public static function renderHTML($titre,$forms) {
		echo "<center><h2>$titre</h2></center>
            <center>$forms</center>";
    }
}
