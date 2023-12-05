<?php
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      x={
 *          "logo": {
 *              "url": "https://via.placeholder.com/190x90.png?text=L5-Swagger"
 *          }
 *      },
 *      title="L5 OpenApi",
 *      description="L5 Swagger OpenApi description",
 *      @OA\Contact(
 *          email="darius@matulionis.lt"
 *      ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="https://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 */

class L5SwaggerAnnotationsExampleInfo
{
    /**
     * Delete notification by ID.
     *
     * @OA\Delete(
     *      path="/api/v0.0.2/notifications",
     *      operationId="deleteNotificationById",
     *      @OA\Parameter(name="id", in="path", @OA\Schema(type="integer")),
     *      @OA\Response(response=200, description="OK"),
     *      @OA\Response(response=400, description="Bad Request")
     * )
     *
     */
    public function destroy() {
        //
    }
}