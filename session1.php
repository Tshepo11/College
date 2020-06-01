
<?PHP

require 'connect.php';

session_start();

 function write ($session_id, $session_data)
// write session data to the database.
{
    if (!empty($this->fieldarray)) {
        if ($this->fieldarray['session_id'] != $session_id) {
            // user is starting a new session with previous data
            $this->fieldarray = array();
        } // if
    } // if

    if (empty($this->fieldarray)) {
        // create new record
        $array['session_id']   = $session_id;
        $array['date_created'] = getTimeStamp();
        $array['last_updated'] = getTimeStamp();
        $array['session_data'] = addslashes($session_data);
        $this->_dml_insertRecord($array);
    } else {
        // update existing record
        if (isset($_SESSION['logon_user_id'])) {
            $array['user_id']  = $_SESSION['logon_user_id'];
        } // if
        $array['last_updated'] = getTimeStamp();
        $array['session_data'] = addslashes($session_data);
        $this->_dml_updateRecord($array, $this->fieldarray);
    } // if

    return TRUE;

} // write

?>