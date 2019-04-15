<?php
/**
 * @file
 */
namespace Drupal\logger_test\Controller;

use Drupal\Core\Controller\ControllerBase;

class LoggerTestController extends ControllerBase
{

    //For ques 1 : Enters the following messages to the logs
    public function logentry()
    {
        \Drupal::logger('Log Updates')->notice('Notice severity message logged');
        \Drupal::logger('Log Updates')->info('Info severity message logged');
        \Drupal::logger('Log Updates')->alert('Alert severity message logged');
        \Drupal::logger('Log Updates')->emergency('Emergency severity message logged');
        return [
            '#type' => '#markup',
            '#markup' => 'Check log messages'
        ];
    }

    // For ques 2 : It uses the logger factory and check if the value is set or not
    public function loggerFactory()
    {
        $logger_name = \Drupal::service('logger_test.custom_logger')->getLoggerChannel()->get('Log Updates');
        if (isset($logger_name)) {
            return [
                '#type' => '#markup',
                '#markup' => 'The logger value is set',
            ];
        } else {
            return [
              '#type' => '#markup',
              '#markup' => 'The logger value is not set',
            ];
        }
    }
}
