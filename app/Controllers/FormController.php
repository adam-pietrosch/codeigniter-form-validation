<?php 
namespace App\Controllers;
use App\Models\FormModel;
use App\Models\UserType;
use CodeIgniter\Controller;

class FormController extends Controller
{

    public function create() {
        $userTypes = new UserType().get();
        return view('contact_form', ['usertypes' => $userTypes]);
    }
 
    public function formValidation() {
        helper(['form', 'url']);
        
        $input = $this->validate([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'phone' => 'required|numeric|max_length[9]',
            'user_type' => 'required'
        ]);

        $formModel = new FormModel();
 
        if (!$input) {
            echo view('contact_form', [
                'validation' => $this->validator
            ]);
        } else {
            $formModel->save([
                'name' => $this->request->getVar('name'),
                'email'  => $this->request->getVar('email'),
                'phone'  => $this->request->getVar('phone'),
                'user_type_id'  => $this->request->getVar('user_type'),
            ]);          

            return $this->response->redirect(site_url('/submit-form'));
        }
    }

}
