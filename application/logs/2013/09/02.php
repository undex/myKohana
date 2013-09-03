<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-02 21:34:14 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_DefaultTemplate' not found ~ APPPATH\classes\Controller\index.php [ 4 ] in :
2013-09-02 21:34:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-02 21:34:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_DefaultTemplate' not found ~ APPPATH\classes\Controller\index.php [ 4 ] in :
2013-09-02 21:34:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-02 21:35:19 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_DefaultTemplate' not found ~ APPPATH\classes\Controller\index.php [ 4 ] in :
2013-09-02 21:35:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-02 21:35:56 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/default could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\myKohana\system\classes\Kohana\View.php:137
2013-09-02 21:35:56 --- DEBUG: #0 C:\wamp\www\myKohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/defau...')
#1 C:\wamp\www\myKohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/defau...', NULL)
#2 C:\wamp\www\myKohana\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('templates/defau...')
#3 C:\wamp\www\myKohana\application\classes\Controller\DefaultTemplate.php(15): Kohana_Controller_Template->before()
#4 C:\wamp\www\myKohana\system\classes\Kohana\Controller.php(69): Controller_DefaultTemplate->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_index))
#7 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\myKohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\myKohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\myKohana\system\classes\Kohana\View.php:137
2013-09-02 21:36:49 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/toolbar.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\myKohana\system\classes\Kohana\View.php:137
2013-09-02 21:36:49 --- DEBUG: #0 C:\wamp\www\myKohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/toolbar.p...')
#1 C:\wamp\www\myKohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/toolbar.p...', NULL)
#2 C:\wamp\www\myKohana\application\classes\Controller\index.php(11): Kohana_View::factory('pages/toolbar.p...')
#3 C:\wamp\www\myKohana\system\classes\Kohana\Controller.php(84): Controller_index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_index))
#6 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\myKohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\myKohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\myKohana\system\classes\Kohana\View.php:137
2013-09-02 21:37:58 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/toolbar.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\myKohana\system\classes\Kohana\View.php:137
2013-09-02 21:37:58 --- DEBUG: #0 C:\wamp\www\myKohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/toolbar.p...')
#1 C:\wamp\www\myKohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/toolbar.p...', NULL)
#2 C:\wamp\www\myKohana\application\classes\Controller\index.php(11): Kohana_View::factory('pages/toolbar.p...')
#3 C:\wamp\www\myKohana\system\classes\Kohana\Controller.php(84): Controller_index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_index))
#6 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\myKohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\myKohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\myKohana\system\classes\Kohana\View.php:137
2013-09-02 21:38:38 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/toolbar.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\myKohana\system\classes\Kohana\View.php:137
2013-09-02 21:38:38 --- DEBUG: #0 C:\wamp\www\myKohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/toolbar.p...')
#1 C:\wamp\www\myKohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/toolbar.p...', NULL)
#2 C:\wamp\www\myKohana\application\classes\Controller\index.php(11): Kohana_View::factory('pages/toolbar.p...')
#3 C:\wamp\www\myKohana\system\classes\Kohana\Controller.php(84): Controller_index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_index))
#6 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\myKohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\myKohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\myKohana\system\classes\Kohana\View.php:137
2013-09-02 21:39:01 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/toolbar.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\myKohana\system\classes\Kohana\View.php:137
2013-09-02 21:39:01 --- DEBUG: #0 C:\wamp\www\myKohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/toolbar.p...')
#1 C:\wamp\www\myKohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/toolbar.p...', NULL)
#2 C:\wamp\www\myKohana\application\classes\Controller\index.php(11): Kohana_View::factory('pages/toolbar.p...')
#3 C:\wamp\www\myKohana\system\classes\Kohana\Controller.php(84): Controller_index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_index))
#6 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\myKohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\myKohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\myKohana\system\classes\Kohana\View.php:137
2013-09-02 21:39:17 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: scripts ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\wamp\www\myKohana\application\classes\Controller\DefaultTemplate.php:40
2013-09-02 21:39:17 --- DEBUG: #0 C:\wamp\www\myKohana\application\classes\Controller\DefaultTemplate.php(40): Kohana_View->__get('scripts')
#1 C:\wamp\www\myKohana\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_index))
#4 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\myKohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\myKohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\myKohana\application\classes\Controller\DefaultTemplate.php:40
2013-09-02 21:39:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\templates\default.php [ 20 ] in C:\wamp\www\myKohana\application\views\templates\default.php:20
2013-09-02 21:39:44 --- DEBUG: #0 C:\wamp\www\myKohana\application\views\templates\default.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\myK...', 20, Array)
#1 C:\wamp\www\myKohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\myK...')
#2 C:\wamp\www\myKohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\myK...', Array)
#3 C:\wamp\www\myKohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\myKohana\application\classes\Controller\DefaultTemplate.php(44): Kohana_Controller_Template->after()
#5 C:\wamp\www\myKohana\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_index))
#8 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\myKohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\myKohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\myKohana\application\views\templates\default.php:20
2013-09-02 21:39:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\templates\default.php [ 22 ] in :
2013-09-02 21:39:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-02 21:52:29 --- CRITICAL: ErrorException [ 2 ]: include(mainright.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\views\pages\toolbar.php [ 6 ] in C:\wamp\www\myKohana\application\views\pages\toolbar.php:6
2013-09-02 21:52:29 --- DEBUG: #0 C:\wamp\www\myKohana\application\views\pages\toolbar.php(6): Kohana_Core::error_handler(2, 'include(mainrig...', 'C:\wamp\www\myK...', 6, Array)
#1 C:\wamp\www\myKohana\application\views\pages\toolbar.php(6): include()
#2 C:\wamp\www\myKohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\myK...')
#3 C:\wamp\www\myKohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\myK...', Array)
#4 C:\wamp\www\myKohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\myKohana\application\views\templates\default.php(26): Kohana_View->__toString()
#6 C:\wamp\www\myKohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\myK...')
#7 C:\wamp\www\myKohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\myK...', Array)
#8 C:\wamp\www\myKohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\myKohana\application\classes\Controller\DefaultTemplate.php(44): Kohana_Controller_Template->after()
#10 C:\wamp\www\myKohana\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_index))
#13 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\myKohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\myKohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\myKohana\application\views\pages\toolbar.php:6
2013-09-02 21:52:49 --- CRITICAL: ErrorException [ 2 ]: include(mainright.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\views\pages\toolbar.php [ 6 ] in C:\wamp\www\myKohana\application\views\pages\toolbar.php:6
2013-09-02 21:52:49 --- DEBUG: #0 C:\wamp\www\myKohana\application\views\pages\toolbar.php(6): Kohana_Core::error_handler(2, 'include(mainrig...', 'C:\wamp\www\myK...', 6, Array)
#1 C:\wamp\www\myKohana\application\views\pages\toolbar.php(6): include()
#2 C:\wamp\www\myKohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\myK...')
#3 C:\wamp\www\myKohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\myK...', Array)
#4 C:\wamp\www\myKohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\myKohana\application\views\templates\default.php(26): Kohana_View->__toString()
#6 C:\wamp\www\myKohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\myK...')
#7 C:\wamp\www\myKohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\myK...', Array)
#8 C:\wamp\www\myKohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\myKohana\application\classes\Controller\DefaultTemplate.php(44): Kohana_Controller_Template->after()
#10 C:\wamp\www\myKohana\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_index))
#13 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\myKohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\myKohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\myKohana\application\views\pages\toolbar.php:6
2013-09-02 21:52:59 --- CRITICAL: ErrorException [ 2 ]: include(mainright.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\views\pages\toolbar.php [ 6 ] in C:\wamp\www\myKohana\application\views\pages\toolbar.php:6
2013-09-02 21:52:59 --- DEBUG: #0 C:\wamp\www\myKohana\application\views\pages\toolbar.php(6): Kohana_Core::error_handler(2, 'include(mainrig...', 'C:\wamp\www\myK...', 6, Array)
#1 C:\wamp\www\myKohana\application\views\pages\toolbar.php(6): include()
#2 C:\wamp\www\myKohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\myK...')
#3 C:\wamp\www\myKohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\myK...', Array)
#4 C:\wamp\www\myKohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\myKohana\application\views\templates\default.php(26): Kohana_View->__toString()
#6 C:\wamp\www\myKohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\myK...')
#7 C:\wamp\www\myKohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\myK...', Array)
#8 C:\wamp\www\myKohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\myKohana\application\classes\Controller\DefaultTemplate.php(44): Kohana_Controller_Template->after()
#10 C:\wamp\www\myKohana\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_index))
#13 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\myKohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\myKohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\myKohana\application\views\pages\toolbar.php:6
2013-09-02 21:53:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\pages\toolbar.php [ 11 ] in :
2013-09-02 21:53:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-02 22:01:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::find_files() ~ APPPATH\views\pages\toolbar.php [ 6 ] in :
2013-09-02 22:01:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-02 22:04:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::find_files() ~ APPPATH\views\pages\toolbar.php [ 6 ] in :
2013-09-02 22:04:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-02 22:05:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::find_files() ~ APPPATH\views\pages\toolbar.php [ 6 ] in :
2013-09-02 22:05:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-02 22:07:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::find_files() ~ APPPATH\views\pages\toolbar.php [ 6 ] in :
2013-09-02 22:07:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-02 22:08:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::find_files() ~ APPPATH\views\pages\toolbar.php [ 6 ] in :
2013-09-02 22:08:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-02 22:09:32 --- CRITICAL: ErrorException [ 2 ]: include(jobwindow.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\views\pages\toolbar.php [ 6 ] in C:\wamp\www\myKohana\application\views\pages\toolbar.php:6
2013-09-02 22:09:32 --- DEBUG: #0 C:\wamp\www\myKohana\application\views\pages\toolbar.php(6): Kohana_Core::error_handler(2, 'include(jobwind...', 'C:\wamp\www\myK...', 6, Array)
#1 C:\wamp\www\myKohana\application\views\pages\toolbar.php(6): include()
#2 C:\wamp\www\myKohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\myK...')
#3 C:\wamp\www\myKohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\myK...', Array)
#4 C:\wamp\www\myKohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\myKohana\application\views\templates\default.php(26): Kohana_View->__toString()
#6 C:\wamp\www\myKohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\myK...')
#7 C:\wamp\www\myKohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\myK...', Array)
#8 C:\wamp\www\myKohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\myKohana\application\classes\Controller\DefaultTemplate.php(44): Kohana_Controller_Template->after()
#10 C:\wamp\www\myKohana\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_index))
#13 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\myKohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\myKohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\myKohana\application\views\pages\toolbar.php:6
2013-09-02 22:09:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::find_files() ~ APPPATH\views\pages\toolbar.php [ 16 ] in :
2013-09-02 22:09:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-02 22:13:27 --- CRITICAL: View_Exception [ 0 ]: The requested view mainright could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\myKohana\system\classes\Kohana\View.php:137
2013-09-02 22:13:27 --- DEBUG: #0 C:\wamp\www\myKohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('mainright')
#1 C:\wamp\www\myKohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('mainright', NULL)
#2 C:\wamp\www\myKohana\application\views\pages\toolbar.php(16): Kohana_View::factory('mainright')
#3 C:\wamp\www\myKohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\myK...')
#4 C:\wamp\www\myKohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\myK...', Array)
#5 C:\wamp\www\myKohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\wamp\www\myKohana\application\views\templates\default.php(26): Kohana_View->__toString()
#7 C:\wamp\www\myKohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\myK...')
#8 C:\wamp\www\myKohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\myK...', Array)
#9 C:\wamp\www\myKohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\wamp\www\myKohana\application\classes\Controller\DefaultTemplate.php(44): Kohana_Controller_Template->after()
#11 C:\wamp\www\myKohana\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_index))
#14 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\wamp\www\myKohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 C:\wamp\www\myKohana\index.php(118): Kohana_Request->execute()
#17 {main} in C:\wamp\www\myKohana\system\classes\Kohana\View.php:137
2013-09-02 22:32:26 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: scripts ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\wamp\www\myKohana\application\classes\Controller\DefaultTemplate.php:45
2013-09-02 22:32:26 --- DEBUG: #0 C:\wamp\www\myKohana\application\classes\Controller\DefaultTemplate.php(45): Kohana_View->__get('scripts')
#1 C:\wamp\www\myKohana\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_index))
#4 C:\wamp\www\myKohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\myKohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\myKohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\myKohana\application\classes\Controller\DefaultTemplate.php:45