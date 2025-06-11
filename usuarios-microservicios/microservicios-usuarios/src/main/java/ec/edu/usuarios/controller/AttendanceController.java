package ec.edu.usuarios.controller;

import java.util.List;

import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import ec.edu.usuarios.model.AttendanceMark;
import ec.edu.usuarios.repository.AttendanceMarkRepository;

@RestController
@RequestMapping("/api/attendance")
public class AttendanceController {

    private final AttendanceMarkRepository repository;

    public AttendanceController(AttendanceMarkRepository repository) {
        this.repository = repository;
    }

    // Endpoint para obtener todas las marcas de asistencia de una sesión
    @GetMapping("/marks/{sessionId}")
    public ResponseEntity<List<AttendanceMark>> getMarksBySession(@PathVariable("sessionId") Long sessionId) {
        List<AttendanceMark> marks = repository.findBySessionId(sessionId);
        return ResponseEntity.ok(marks);
    }

    // Endpoint para marcar asistencia (crear)
    @PostMapping("/mark")
    public ResponseEntity<AttendanceMark> markAttendance(@RequestBody AttendanceMark mark) {
        AttendanceMark savedMark = repository.save(mark);
        return ResponseEntity.ok(savedMark);
    }
}