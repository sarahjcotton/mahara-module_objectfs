<?php
  /**
   * Strings for component 'module_objectfs', language 'en'.
   *
   * @package    mahara
   * @subpackage module_objectfs
   * @author     Catalyst IT
   * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
   */

$string['pluginname'] = 'Object storage file system';
$string['push_objects_to_storage_task'] = 'Object file system upload task';
$string['delete_local_objects_task'] = 'Object file system delete local objects task';
$string['pull_objects_from_storage_task'] = 'Object file system download objects task';

$string['generate_status_report_task'] = 'Object status report generator task';
$string['not_enabled'] = 'The object file system background tasks are not enabled. No objects will move location until you do.';

$string['object_status:page'] = 'Object status';
$string['object_status:location'] = 'Object location';
$string['object_status:files'] = 'Objects';
$string['object_status:size'] = 'Total size';

$string['object_status:fileranges'] = 'Object file ranges';
$string['object_status:mimetypes'] = 'Object mime types';

$string['object_status:location:error'] = 'Missing from filedir and external storage';
$string['object_status:location:duplicated'] = 'Duplicated in filedir and external storage';
$string['object_status:location:local'] = 'Only in filedir';
$string['object_status:location:external'] = 'Only in external storage';
$string['object_status:location:unknown'] = 'Unknown object location';
$string['object_status:location:total'] = 'Total';

$string['object_status:last_run'] = 'This report was generated on {$a}';
$string['object_status:never_run'] = 'The task to generate this report has not been run.';

$string['settings'] = 'Settings';
$string['settings:enabletasks'] = 'Enable transfer tasks';
$string['settings:enabletasks_help'] = 'Enable or disable the object file system tasks which move files between the filedir and external object storage.';
$string['settings:enablelogging'] = 'Enable real time logging';
$string['settings:enablelogging_help'] = 'Enable or disable file system logging. Will output diagnostic information to the php error log. ';

$string['settings:generalheader'] = 'General Settings';

$string['settings:awsheader'] = 'Amazon S3 Settings';
$string['settings:key'] = 'Key';
$string['settings:key_help'] = 'Amazon S3 key credential.';
$string['settings:secret'] = 'Secret';
$string['settings:secret_help'] = 'Amazon S3 secret credential.';
$string['settings:bucket'] = 'Bucket';
$string['settings:bucket_help'] = 'Amazon S3 bucket to store files in.';
$string['settings:region'] = 'region';
$string['settings:region_help'] = 'Amazon S3 API gateway region.';

$string['settings:filetransferheader'] = 'File Transfer Settings';
$string['settings:sizethreshold'] = 'Minimum size threshold (KB)';
$string['settings:sizethreshold_help'] = 'Minimum size threshold for transfering objects to external object storage. If objects are over this size they will be transfered.';
$string['settings:minimumage'] = 'Minimum age';
$string['settings:minimumage_help'] = 'Minimum age that a object must exist on the local filedir before it will be considered for transfer.';
$string['settings:deletelocal'] = 'Delete local objects';
$string['settings:deletelocal_help'] = 'Delete local objects once they are in external object storage after the consistency delay.';
$string['settings:consistencydelay'] = 'Consistency delay';
$string['settings:consistencydelay_help'] = 'How long an object must have existed after being transfered to external object storage before they are a candidate for deletion locally.';
$string['settings:maxtaskruntime'] = 'Maximum transfer task runtime';
$string['settings:maxtaskruntime_help'] = 'Background tasks handle the transfer of objects to and from external object storage. This setting controlls the maximum runtime for all object transfer related tasks.';
$string['settings:preferexternal'] = 'Prefer external objects';
$string['settings:preferexternal_help'] = 'If a file is stored both locally and in external object storage, read from external. This is setting is mainly for testing purposes and introduces overhead to check the location.';

$string['settings:connection'] = 'Test connection to the AWS S3 bucket.';
$string['settings:connectionsuccess'] = 'Could establish connection to the AWS S3 bucket.';
$string['settings:connectionfailure'] = 'Could not establish connection to the AWS S3 bucket.';
$string['settings:permissions'] = 'Test file permissions in the AWS S3 bucket.';
$string['settings:writefailure'] = 'Could not write object to the S3 bucket. ';
$string['settings:readfailure'] = 'Could not read object from the S3 bucket. ';
$string['settings:deletesuccess'] = 'Could delete object from the S3 bucket - It is not recommended for the AWS user to have delete permissions. ';
$string['settings:deleteerror'] = 'An unspecified error occured. ';
$string['settings:permissioncheckpassed'] = 'Permissions check passed.';
$string['settings:handlernotset'] = '$CFG->alternative_file_system_class is not set, the file system will not be able to read from S3. Background tasks can still function.';

$string['validationerror:notint'] = 'Please enter integers only';
$string['validationerror:negative'] = 'Only positive integers allowed';
