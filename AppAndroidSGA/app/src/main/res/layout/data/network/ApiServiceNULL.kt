package com.componetes.appandroid.data.network

import com.componetes.appandroid.data.modelo.respuesta.asignaturas.Asignatura
import com.componetes.appandroid.data.modelo.respuesta.profesores.Profesor
import retrofit2.Response
import retrofit2.http.POST

interface ApiServiceNULL {

    @POST("profesores")
    suspend fun getProfesores(): Response<List<Profesor>>

    @POST("asignaturas")
    suspend fun getAsignaturas(): List<Asignatura>
}