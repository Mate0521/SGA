package com.componetes.appandroidsga.repository

import com.componetes.appandroid.data.network.RetrofitClient
import com.componetes.appandroidsga.data.modelo.requerimientos.informes.CorreoRequest
import com.componetes.appandroidsga.data.modelo.respuesta.informes.AlumnoResponse

class InfoAlumnoRepository {

    suspend fun obtenerInfoAlumno(correo: String): AlumnoResponse {
        val request = CorreoRequest(correo)
        val response = RetrofitClient.apiService.obtenerInfoAlumno(request)

        if (response.isSuccessful) {
            return response.body()!!
        } else {
            throw Exception("Error: ${response.code()} - ${response.message()}")
        }
    }
}