<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CompanyApiController extends Controller
{
    public function show($id): JsonResponse
    {
        // 1. Find the company along with its related employees collection
        // withCount('employees') automatically appends an 'employees_count' column to the query
        $company = Company::with('employees')->withCount('employees')->find($id);

        // 2. If the company ID doesn't exist, return a clean 404 JSON error
        if (!$company) {
            return response()->json([
                'success' => false,
                'message' => 'Company not found.'
            ], 404);
        }

        // 3. Inject the requested 'employee_count' custom attribute into the model payload
        $company->setAttribute('employee_count', $company->employees_count);

        // 4. Return everything back as a standard JSON payload
        return response()->json($company, 200);
    }
}
