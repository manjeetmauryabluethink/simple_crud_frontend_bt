<?php
namespace Bluethink\Job\Api\Data;
interface ViewInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const JOBID                = 'job_id';
    const NAME                 = 'name';
    const EMAIL                = 'email';
    const TELEPHONE            = 'telephone';
    const JOBOPTION            = 'job_option';
    const UPLOADFILE           = 'upload_file';
    const CREATEDAT            = 'created_at';
    /**#@-*/


    /**
     * Get Title
     *
     * @return string|null
     */
    public function getName();

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getEmail();

    /**
     * Get Created At
     *
     * @return string|null
     */

    public function getTelephone();

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getJobOption();

    /**
     * Get Content
     *
     * @return string|null
     */

    public function getUploadFile();

    /**
     * Get Content
     *
     * @return string|null
     */

    public function getCreatedAt();

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getJobId();

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setName($n);

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setEmail($e);

    /**
     * Set Crated At
     *
     * @param int $createdAt
     * @return $this
     */

    public function setTelephone($t);

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setJobOption($jobop);

    /**
     * Set Crated At
     *
     * @param int $createdAt
     * @return $this
     */

    public function setUploadFile($uploadfile);

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */

    public function setCreatedAt($createdAt);

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setJobId($id);

}