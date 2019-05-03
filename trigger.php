<?php


echo "before";


if (isset($_REQUEST) && $_SERVER['REQUEST_URI'] == 'http://eval-target/trigger.php') {
    //eval();

    $output = array();
    $output_shell = array();
    $var = 'git status';
    /**
     * -v detail info
     * -r rebase
     * -f force fetch
     * merge strategy -Xtheirs ? -X theirs : -s theirs
     * git stash clear
     */
    $test = 'git stash;git stash clear;git pull origin master -v -f -s theirs';
    //exec ( string $command [, array &$output [, int &$return_var ]] ) : string
    exec($var, $output);

    echo "<pre>";
    print_r($output);
    echo "</pre>";



    
    echo "shell";

    $output_shell = shell_exec($var);

    echo "<pre>";
    print_r($output_shell);
    echo "</pre>";

    //shell_exec ( string $cmd ) : string
}


echo "after";



