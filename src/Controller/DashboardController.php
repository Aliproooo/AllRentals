<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Dashboard Controller
 *
 */
class DashboardController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

     public function initialize(): void
     {
         parent::initialize();
         $this->viewBuilder()->setLayout('ajax'); // Set a blank layout
     }
    public function userdashboard()
    {
        $this->render('userdashboard');
      
    }
    public function admindashboard()
    {
        $this->render('admindashboard');
      
    }
    public function createlisting()
    {
        $this->viewBuilder()->disableAutoLayout(); 
        $this->render('createlisting');
        
        
    }

   
}
