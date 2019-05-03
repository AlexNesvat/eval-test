<?php


echo "before";


if (isset($_REQUEST) && $_SERVER['PHP_SELF'] == '/trigger.php') {
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
     * git push --prune origin remove origin repo branches
     * git push --mirror /make remote as local
     */
    $test = 'git stash;git stash clear;git pull origin master -v -f -s theirs;git branch | grep -v "master" | xargs git branch -D;git push --mirror;git push --all;';
    //exec ( string $command [, array &$output [, int &$return_var ]] ) : string

    //TODO: test 'git branch -r -d;' should show and delete all branches
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



