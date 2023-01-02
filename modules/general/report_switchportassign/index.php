<?php
if (cfr('REPORTSWPORT')) {
	
    $switchPortAssignReport = new SwitchPortAssign();

    //getting polls data
    if (ubRouting::checkGet('ajaxswitchassign')) {
       $switchPortAssignReport->loadUsersData();
       $switchPortAssignReport->ajaxAvaibleSwitchPortAssign();
    }

    /*
     * controller and view section
     */
    show_window(__('Switch port assign'), $switchPortAssignReport->renderSwitchPortAssign());

} else {
    show_error(__('You cant control this module'));
}
