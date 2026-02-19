<?php

    $list1 = ["Anna", "Bernat", "Clara", "David", "Elena", "Ferran", "Gemma", "Hugo", "Irene", "Jordi"];
    $list2 = ["Joan", "Marc", "Núria", "Oscar", "Pere", "Clara", "David", "Anna", "Quim", "Rosa"];

    $commonNames = array_intersect($list1, $list2);

    $mixedList = array_unique(array_merge($list1, $list2));

    $uniqueList1 = array_diff($list1, $list2);
    $uniqueList2 = array_diff($list2, $list1);

?>