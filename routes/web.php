<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

// Route to get all patients
Route::get('patients', [PatientController::class, 'index']);

// Route to add a new patient
Route::post('patients', [PatientController::class, 'store']);

// Route to get a specific patient by ID
Route::get('patients/{id}', [PatientController::class, 'show']);

// Route to update a patient by ID
Route::put('patients/{id}', [PatientController::class, 'update']);
Route::patch('patients/{id}', [PatientController::class, 'update']); // Optional for PATCH method

// Route to delete a patient by ID
Route::delete('patients/{id}', [PatientController::class, 'destroy']);

