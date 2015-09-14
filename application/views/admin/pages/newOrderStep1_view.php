<?php
/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 14.09.2015
 * Time: 10:29
 */
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center">Which Company is this order for </h2>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <p class="text-center">When you type a company name we will find the company if it already exists or create a new one if it doesn't</p>
        </div>
        <div id="selectCompany" class="col-md-4 col-md-offset-4 row">
            <input list="companies" class="col-md-12"/>
            <datalist id="companies">
                <option>
                    <a href="dashboard/createNewCompany">Create Company</a>
                </option>
                <option></option>
                <option></option>
                <option></option>
                <option></option>
                <option></option>
            </datalist>
            <!-- <div>
                 <button type="submit">Create Company </button>
             </div>-->
        </div>
    </div>
</div>

