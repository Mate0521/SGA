package com.componetes.appandroid.repository

import com.componetes.appandroid.data.modelo.respuesta.profesores.Profesor
import com.componetes.appandroid.data.network.ApiService
import com.componetes.appandroid.data.network.RetrofitClient

class ProfesorRepository {

    suspend fun obtenerProfesores() =
        RetrofitClient.apiService.getProfesores()

}