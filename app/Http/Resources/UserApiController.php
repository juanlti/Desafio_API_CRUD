<?php

namespace App\Http\Resources;
use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Http;


class UserApiController extends JsonResponse
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }





    public function generarNombres(Request $request):JsonResponse
    {

        $faker = FakerFactory::create();

        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'age' => $faker->numberBetween(18, 60),
            ];
        }

        return response()->json($data);
    }

}
