<?php

class Applicant_SubscribedToLists extends Applicant
{
    private $_selectionsJobs;
    private $_selectionsVerticals;

    public function setSelectionsJobs($selectionsJobs)
    {
        $this->_selectionsJobs = $selectionsJobs;
    }

    public function getSelectionsJobs()
    {
        return $this->_selectionsJobs;
    }

    public function setSelectionsVerticals($selectionsVerticals)
    {
        $this->_selectionsVerticals = $selectionsVerticals;
    }

    public function getSelectionsVerticals()
    {
        return $this->_selectionsVerticals;
    }
}
