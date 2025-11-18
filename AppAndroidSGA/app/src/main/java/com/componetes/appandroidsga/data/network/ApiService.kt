package com.componetes.appandroid.data.network

import com.componetes.appandroid.data.modelo.respuesta.asignaturas.Asignatura
import com.componetes.appandroid.data.modelo.respuesta.profesores.Profesor
import com.componetes.appandroidsga.data.modelo.requerimientos.informes.CorreoRequest
import com.componetes.appandroidsga.data.modelo.respuesta.informes.AlumnoResponse
import retrofit2.Response
import retrofit2.http.Body
import retrofit2.http.POST


interface ApiService {

    @POST("listadoProfesores.php")
    suspend fun getProfesores(): Response<List<Profesor>>

    @POST("listadoAsignaturas.php")
    suspend fun getAsignaturas(): List<Asignatura>

    @POST("info.php")
    suspend fun obtenerInfoAlumno(@Body request: CorreoRequest): Response<AlumnoResponse>
}