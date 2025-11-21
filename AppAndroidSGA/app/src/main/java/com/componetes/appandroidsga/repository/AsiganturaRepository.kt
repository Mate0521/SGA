package com.componetes.appandroid.repository

import com.componetes.appandroid.data.modelo.respuesta.asignaturas.Asignatura
import com.componetes.appandroid.data.network.RetrofitClient

class AsiganturaRepository {

    suspend fun obtenerAsignaturas(): List<Asignatura> {
        return RetrofitClient.apiService.getAsignaturas()
    }
}