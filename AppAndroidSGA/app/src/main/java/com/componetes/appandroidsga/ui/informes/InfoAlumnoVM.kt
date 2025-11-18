package com.componetes.appandroidsga.ui.informes

import androidx.lifecycle.LiveData
import androidx.lifecycle.MutableLiveData
import androidx.lifecycle.ViewModel
import androidx.lifecycle.viewModelScope
import com.componetes.appandroidsga.data.modelo.respuesta.informes.AlumnoResponse
import com.componetes.appandroidsga.repository.InfoAlumnoRepository
import kotlinx.coroutines.launch


class InfoAlumnoVM : ViewModel(){
    private val repository = InfoAlumnoRepository()

    private val _alumno = MutableLiveData<AlumnoResponse>()
    val alumno: LiveData<AlumnoResponse> = _alumno

    private val _loading = MutableLiveData<Boolean>()
    val loading: LiveData<Boolean> = _loading

    private val _error = MutableLiveData<String?>()
    val error: LiveData<String?> = _error

    fun cargarInfo(correo: String) {
        viewModelScope.launch {
            try {
                _loading.value = true
                val respuesta = repository.obtenerInfoAlumno(correo)
                _alumno.value = respuesta
            } catch (e: Exception) {
                _error.value = e.message
            } finally {
                _loading.value = false
            }
        }
    }
}