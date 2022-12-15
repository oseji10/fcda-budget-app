<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{

   /**
    * Dashboard pages
    */
   public function analytic()
   {
      $data = [
         'pageTitle' => 'Analytic',
         'category' => 'pages',
         'subCategory' => 'dashboard',
         'pageName' => 'analytic',

      ];
      return view('dashboard.analytic', $data);
   }
   public function sales()
   {
      $data = [

         'pageTitle' => 'Sales',
         'category' => 'pages',
         'subCategory' => 'dashboard',
         'pageName' => 'sales',

      ];
      return view('dashboard.sales', $data);
   }
   public function jobManagement()
   {
      $data = [

         'pageTitle' => 'Job Management',
         'category' => 'pages',
         'subCategory' => 'dashboard',
         'pageName' => 'jobManagement',

      ];
      return view('dashboard.job-management', $data);
   }

   public function cryptoCurrency()
   {
      $data = [

         'pageTitle' => 'Crypto Currency',
         'category' => 'pages',
         'subCategory' => 'dashboard',
         'pageName' => 'cryptoCurrency',

      ];
      return view('dashboard.crypto-currency', $data);
   }
   public function learningManagement()
   {
      $data = [

         'pageTitle' => 'Learning Management',
         'category' => 'pages',
         'subCategory' => 'dashboard',
         'pageName' => 'learningManagement',

      ];
      return view('dashboard.learning-management', $data);
   }
   public function subscription()
   {
      $data = [

         'pageTitle' => 'Donation',
         'category' => 'pages',
         'subCategory' => 'dashboard',
         'pageName' => 'donation',

      ];
      return view('dashboard.subscription', $data);
   }

   /**
    * Apps
    */
   public function fileManager()
   {
      $data = [

         'pageTitle' => 'File Manager',
         'category' => 'pages',
         'subCategory' => 'app',
         'pageName' => 'filemanager',

      ];
      return view('apps.file-manager', $data);
   }

   public function inbox()
   {
      $data = [

         'pageTitle' => 'Inbox',
         'category' => 'pages',
         'subCategory' => 'app',
         'pageName' => 'inbox',

      ];
      return view('apps.inbox', $data);
   }

   public function scrumboard()
   {
      $data = [

         'pageTitle' => 'Scrumboard',
         'category' => 'pages',
         'subCategory' => 'app',
         'pageName' => 'scrumBoard',

      ];
      return view('apps.scrumboard', $data);
   }
   public function chat()
   {
      $data = [

         'pageTitle' => 'Chat',
         'category' => 'pages',
         'subCategory' => 'app',
         'pageName' => 'chat',

      ];
      return view('apps.chat', $data);
   }

   public function note()
   {
      $data = [

         'pageTitle' => 'Note',
         'category' => 'pages',
         'subCategory' => 'app',
         'pageName' => 'note',

      ];
      return view('apps.note', $data);
   }

   /**
    * Pages
    */
   public function blank()
   {
      $data = [
         'pageTitle' => 'Blank',
         'category' => 'pages',
         'subCategory' => 'home',
         'pageName' => 'blank',

      ];
      return view('pages.blank', $data);
   }
   /**
    * pages/faq
    */

   public function faqv1()
   {
      $data = [
         'pageTitle' => 'Faq One',
         'category' => 'pages',
         'subCategory' => 'faq',
         'pageName' => 'faq.v1',

      ];
      return view('pages.faq.faq-v1', $data);
   }
   public function faqv2()
   {
      $data = [
         'pageTitle' => 'Faq Two',
         'category' => 'pages',
         'subCategory' => 'faq',
         'pageName' => 'faq.v2',

      ];
      return view('pages.faq.faq-v2', $data);
   }

   public function faqv3()
   {
      $data = [
         'pageTitle' => 'Faq Three',
         'category' => 'pages',
         'subCategory' => 'faq',
         'pageName' => 'faq.v3',

      ];
      return view('pages.faq.faq-v3', $data);
   }

   /**
    * 
    * pages/list
    */
   public function columnList()
   {
      $data = [
         'pageTitle' => 'List Column',
         'category' => 'pages',
         'subCategory' => 'list',
         'pageName' => 'column-list',

      ];
      return view('pages.list.column-list', $data);
   }

   public function columnListTwo()
   {
      $data = [
         'pageTitle' => 'List Column Two',
         'category' => 'pages',
         'subCategory' => 'list',
         'pageName' => 'column-list-two',

      ];
      return view('pages.list.column-list-two', $data);
   }

   public function columnListThree()
   {
      $data = [
         'pageTitle' => 'List Column Three',
         'category' => 'pages',
         'subCategory' => 'list',
         'pageName' => 'column-list-three',

      ];
      return view('pages.list.column-list-three', $data);
   }

   public function columnListRow()
   {
      $data = [
         'pageTitle' => 'List Column Row',
         'category' => 'pages',
         'subCategory' => 'list',
         'pageName' => 'column-list-row',

      ];
      return view('pages.list.column-list-row', $data);
   }

   /**
    * pages/pricing
    */

   public function pricingV1()
   {
      $data = [
         'pageTitle' => 'Pricing V1',
         'category' => 'pages',
         'subCategory' => 'pricing',
         'pageName' => 'pricing.v1',

      ];
      return view('pages.pricing.pricing-v1', $data);
   }

   public function pricingV2()
   {
      $data = [
         'pageTitle' => 'Pricing V2',
         'category' => 'pages',
         'subCategory' => 'pricing',
         'pageName' => 'pricing.v2',

      ];
      return view('pages.pricing.pricing-v2', $data);
   }
   public function pricingV3()
   {
      $data = [
         'pageTitle' => 'Pricing V3',
         'category' => 'pages',
         'subCategory' => 'pricing',
         'pageName' => 'pricing.v3',

      ];
      return view('pages.pricing.pricing-v3', $data);
   }
   /**
    * pages/Invoice
    */

   public function invoiceV1()
   {
      $data = [
         'pageTitle' => 'Invoice V1',
         'category' => 'pages',
         'subCategory' => 'invoice',
         'pageName' => 'invoice',

      ];
      return view('pages.invoice.invoice-v1', $data);
   }
   public function invoiceV2()
   {
      $data = [
         'pageTitle' => 'Invoice V2',
         'category' => 'pages',
         'subCategory' => 'invoice',
         'pageName' => 'invoice',

      ];
      return view('pages.invoice.invoice-v2', $data);
   }
   public function invoiceEdit()
   {
      $data = [
         'pageTitle' => 'Invoice Edit',
         'category' => 'pages',
         'subCategory' => 'invoice',
         'pageName' => 'invoice.edit',

      ];
      return view('pages.invoice.invoice-edit', $data);
   }

   /**
    * Pages/Profile
    */

   public function profileV1()
   {
      $data = [
         'pageTitle' => 'Profile V1',
         'category' => 'pages',
         'subCategory' => 'profile',
         'pageName' => 'profile.v1',

      ];
      return view('pages.profile.profile-v1', $data);
   }

   public function profileV2()
   {
      $data = [
         'pageTitle' => 'Profile V2',
         'category' => 'pages',
         'subCategory' => 'profile',
         'pageName' => 'profile.v2',

      ];
      return view('pages.profile.profile-v2', $data);
   }

   /**
    * Drag&Drop
    */

   public function dragAndDrop()
   {
      $data = [
         'pageTitle' => 'Drag & Drop',
         'category' => 'pages',
         'subCategory' => 'pages',
         'pageName' => 'dragAndDrop',

      ];
      return view('pages.drag-and-drop', $data);
   }


   /**
    * Photo Grid
    */

   public function photoGrid()
   {
      $data = [
         'pageTitle' => 'Photo Grid',
         'category' => 'pages',
         'subCategory' => 'pages',
         'pageName' => 'photo-grid',

      ];
      return view('pages.photo-grid', $data);
   }



   /**
    *pages/session
    */

   public function signinV1()
   {
      $data = [
         'pageTitle' => 'Signin V1',
         'category' => 'pages',
         'subCategory' => 'session',
         'pageName' => 'session.v1',

      ];
      return view('pages.session.signin-v1', $data);
   }
   public function signinV2()
   {
      $data = [
         'pageTitle' => 'Signin V2',
         'category' => 'pages',
         'subCategory' => 'session',
         'pageName' => 'session.v2',

      ];
      return view('pages.session.signin-v2', $data);
   }

   public function signinV3()
   {
      $data = [
         'pageTitle' => 'Signin V3',
         'category' => 'pages',
         'subCategory' => 'session',
         'pageName' => 'session.v3',

      ];
      return view('pages.session.signin-v3', $data);
   }
   public function signinV4()
   {
      $data = [
         'pageTitle' => 'Signin V4',
         'category' => 'pages',
         'subCategory' => 'session',
         'pageName' => 'session.v4',

      ];
      return view('pages.session.signin-v4', $data);
   }

   public function signupV1()
   {
      $data = [
         'pageTitle' => 'Signup V1',
         'category' => 'pages',
         'subCategory' => 'session',
         'pageName' => 'session.v1',

      ];
      return view('pages.session.signup-v1', $data);
   }

   public function signupV2()
   {
      $data = [
         'pageTitle' => 'Signup V2',
         'category' => 'pages',
         'subCategory' => 'session',
         'pageName' => 'session.v2',

      ];
      return view('pages.session.signup-v2', $data);
   }

   public function signupV3()
   {
      $data = [
         'pageTitle' => 'Signup V3',
         'category' => 'pages',
         'subCategory' => 'session',
         'pageName' => 'session.v3',

      ];
      return view('pages.session.signup-v3', $data);
   }

   public function signupV4()
   {
      $data = [
         'pageTitle' => 'Signup V4',
         'category' => 'pages',
         'subCategory' => 'session',
         'pageName' => 'session.v4',

      ];
      return view('pages.session.signup-v4', $data);
   }
   public function error404()
   {
      $data = [
         'pageTitle' => 'Error 404',
         'category' => 'pages',
         'subCategory' => 'session',
         'pageName' => 'error',

      ];
      return view('pages.session.error-404', $data);
   }
   public function error505()
   {
      $data = [
         'pageTitle' => 'Error 505',
         'category' => 'pages',
         'subCategory' => 'session',
         'pageName' => 'error',

      ];
      return view('pages.session.error-505', $data);
   }

   public function forgotPassword()
   {
      $data = [
         'pageTitle' => 'Forgot Password',
         'category' => 'pages',
         'subCategory' => 'session',
         'pageName' => 'session.v1',

      ];
      return view('pages.session.forgot-password', $data);
   }

   public function lockScreen()
   {
      $data = [
         'pageTitle' => 'Lock Screen',
         'category' => 'pages',
         'subCategory' => 'session',
         'pageName' => 'session.v1',

      ];
      return view('pages.session.lock-screen', $data);
   }

   /**
    * blocks
    */


   public function sidebarBlock()
   {
      $data = [
         'pageTitle' => 'Sidebar',
         'category' => 'pages',
         'subCategory' => 'blocks',
         'pageName' => 'sidebar-block',

      ];
      return view('blocks.sidebar-block', $data);
   }


   public function creditCardBlock()
   {
      $data = [
         'pageTitle' => 'Credit card',
         'category' => 'pages',
         'subCategory' => 'blocks',
         'pageName' => 'credit-card-block',

      ];
      return view('blocks.credit-card-block', $data);
   }
   /**
    * components
    */

   public function accordion()
   {
      $data = [
         'pageTitle' => 'Accordion',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'accordion',

      ];
      return view('components.accordion', $data);
   }

   public function alert()
   {
      $data = [
         'pageTitle' => 'alert',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'alert',

      ];
      return view('components.alert', $data);
   }

   public function avatar()
   {
      $data = [
         'pageTitle' => 'avatar',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'avatar',

      ];
      return view('components.avatar', $data);
   }

   public function badge()
   {
      $data = [
         'pageTitle' => 'badge',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'badge',

      ];
      return view('components.badge', $data);
   }

   public function breadcrumb()
   {
      $data = [
         'pageTitle' => 'breadcrumb',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'breadcrumb',

      ];
      return view('components.breadcrumb', $data);
   }


   public function buttons()
   {
      $data = [
         'pageTitle' => 'buttons',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'buttons',

      ];
      return view('components.buttons', $data);
   }

   public function carousel()
   {
      $data = [
         'pageTitle' => 'carousel',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'carousel',

      ];
      return view('components.carousel', $data);
   }

   public function dropdown()
   {
      $data = [
         'pageTitle' => 'dropdown',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'dropdown',

      ];
      return view('components.dropdown', $data);
   }

   public function forms()
   {
      $data = [
         'pageTitle' => 'Forms',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'forms',

      ];
      return view('components.forms', $data);
   }

   public function formsLayout()
   {
      $data = [
         'pageTitle' => 'forms layout',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'forms-layout',

      ];
      return view('components.forms-layout', $data);
   }

   public function list()
   {
      $data = [
         'pageTitle' => 'list',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'list',

      ];
      return view('components.list', $data);
   }

   public function pagination()
   {
      $data = [
         'pageTitle' => 'pagination',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'pagination',

      ];
      return view('components.pagination', $data);
   }

   public function popovers()
   {
      $data = [
         'pageTitle' => 'popovers',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'popovers',

      ];
      return view('components.popovers', $data);
   }

   public function progressbar()
   {
      $data = [
         'pageTitle' => 'progressbar',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'progressbar',

      ];
      return view('components.progressbar', $data);
   }


   public function snackbar()
   {
      $data = [
         'pageTitle' => 'snackbar',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'snackbar',

      ];
      return view('components.snackbar', $data);
   }

   public function tab()
   {
      $data = [
         'pageTitle' => 'tab',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'tab',

      ];
      return view('components.tab', $data);
   }

   public function tooltip()
   {
      $data = [
         'pageTitle' => 'tooltip',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'tooltip',

      ];
      return view('components.tooltip', $data);
   }

   public function tour()
   {
      $data = [
         'pageTitle' => 'tour',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'tour',

      ];
      return view('components.tour', $data);
   }

   public function sweetAlert()
   {
      $data = [
         'pageTitle' => 'sweet alert',
         'category' => 'pages',
         'subCategory' => 'components',
         'pageName' => 'sweetAlert2',

      ];
      return view('components.sweet-alert', $data);
   }

   /**
    * Form widgets
    */

   public function editor()
   {
      $data = [
         'pageTitle' => 'editor',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'editor',

      ];
      return view('form-widgets.editor', $data);
   }

   public function filepond()
   {
      $data = [
         'pageTitle' => 'filepond',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'filepond',

      ];
      return view('form-widgets.filepond', $data);
   }

   public function bootstrapMaxlength()
   {
      $data = [
         'pageTitle' => 'bootstrap maxlength',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'bootstrap-maxlength',

      ];
      return view('form-widgets.bootstrap-maxlength', $data);
   }


   public function bootstrapSelect()
   {
      $data = [
         'pageTitle' => 'bootstrap select',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'bootstrap-select',

      ];
      return view('form-widgets.bootstrap-select', $data);
   }

   public function bootstrapTagify()
   {
      $data = [
         'pageTitle' => 'bootstrap tagify',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'bootstrap-tagify',

      ];
      return view('form-widgets.bootstrap-tagify', $data);
   }

   public function clipboard()
   {
      $data = [
         'pageTitle' => 'clipboard',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'clipboard',

      ];
      return view('form-widgets.clipboard', $data);
   }

   public function datepicker()
   {
      $data = [
         'pageTitle' => 'datepicker',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'datepicker',

      ];
      return view('form-widgets.datepicker', $data);
   }

   public function dropzone()
   {
      $data = [
         'pageTitle' => 'dropzone',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'dropzone',

      ];
      return view('form-widgets.dropzone', $data);
   }

   public function formRepeater()
   {
      $data = [
         'pageTitle' => 'form repeater',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'form-repeater',

      ];
      return view('form-widgets.form-repeater', $data);
   }
   public function inputmask()
   {
      $data = [
         'pageTitle' => 'inputmask',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'inputmask',

      ];
      return view('form-widgets.inputmask', $data);
   }

   public function nouislider()
   {
      $data = [
         'pageTitle' => 'nouislider',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'nouislider',

      ];
      return view('form-widgets.nouislider', $data);
   }

   public function select2()
   {
      $data = [
         'pageTitle' => 'select2',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'select2',

      ];
      return view('form-widgets.select2', $data);
   }

   public function timepicker()
   {
      $data = [
         'pageTitle' => 'timepicker',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'timepicker',

      ];
      return view('form-widgets.timepicker', $data);
   }

   public function touchspin()
   {
      $data = [
         'pageTitle' => 'touchspin',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'touchspin',

      ];
      return view('form-widgets.touchspin', $data);
   }

   public function typehead()
   {
      $data = [
         'pageTitle' => 'typehead',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'typehead',

      ];
      return view('form-widgets.typehead', $data);
   }

   public function uppy()
   {
      $data = [
         'pageTitle' => 'uppy',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'uppy',

      ];
      return view('form-widgets.uppy', $data);
   }


   public function validation()
   {
      $data = [
         'pageTitle' => 'validation',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'validation',

      ];
      return view('form-widgets.validation', $data);
   }

   public function imagecrop()
   {
      $data = [
         'pageTitle' => 'imagecrop',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'imagecrop',

      ];
      return view('form-widgets.imagecrop', $data);
   }

   public function wizard1()
   {
      $data = [
         'pageTitle' => 'wizard1',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'wizard1',

      ];
      return view('form-widgets.wizard1', $data);
   }

   public function wizard2()
   {
      $data = [
         'pageTitle' => 'wizard2',
         'category' => 'pages',
         'subCategory' => 'forms',
         'pageName' => 'wizard2',

      ];
      return view('form-widgets.wizard2', $data);
   }
   // system utitlites

   public function sassVariable()
   {
      $data = [
         'pageTitle' => 'sass variable',
         'category' => 'pages',
         'subCategory' => 'system utilities',
         'pageName' => 'sass-variable',

      ];
      return view('system-utilities.sass-variable', $data);
   }
   public function background()
   {
      $data = [
         'pageTitle' => 'background',
         'category' => 'pages',
         'subCategory' => 'system utilities',
         'pageName' => 'background',

      ];
      return view('system-utilities.background', $data);
   }

   public function colors()
   {
      $data = [
         'pageTitle' => 'colors',
         'category' => 'pages',
         'subCategory' => 'system utilities',
         'pageName' => 'colors',

      ];
      return view('system-utilities.colors', $data);
   }

   public function shadow()
   {
      $data = [
         'pageTitle' => 'shadow',
         'category' => 'pages',
         'subCategory' => 'system utilities',
         'pageName' => 'shadow',

      ];
      return view('system-utilities.shadow', $data);
   }

   public function spacing()
   {
      $data = [
         'pageTitle' => 'spacing',
         'category' => 'pages',
         'subCategory' => 'system utilities',
         'pageName' => 'spacing',

      ];
      return view('system-utilities.spacing', $data);
   }
   public function typography()
   {
      $data = [
         'pageTitle' => 'typography',
         'category' => 'pages',
         'subCategory' => 'system utilities',
         'pageName' => 'typography',

      ];
      return view('system-utilities.typography', $data);
   }

   // widgets
   public function charts()
   {
      $data = [
         'pageTitle' => 'charts',
         'category' => 'pages',
         'subCategory' => 'widgets',
         'pageName' => 'charts',

      ];
      return view('widgets.charts', $data);
   }

   public function general()
   {
      $data = [
         'pageTitle' => 'general',
         'category' => 'pages',
         'subCategory' => 'widgets',
         'pageName' => 'general',

      ];
      return view('widgets.general', $data);
   }

   public function table()
   {
      $data = [
         'pageTitle' => 'table',
         'category' => 'pages',
         'subCategory' => 'widgets',
         'pageName' => 'table',

      ];
      return view('widgets.table', $data);
   }
}
